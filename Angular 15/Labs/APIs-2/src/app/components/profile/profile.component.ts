import { Component, Input } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { IPost } from 'src/app/Models/ipost';
import { Post } from 'src/app/Models/post';
import { User } from 'src/app/Models/user';
import { PostAPIService } from 'src/app/Services/post-api.service';
import { UserService } from 'src/app/Services/user.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent {
  user!: User
  receivedUserID!: string;
  // posts!: Post[]
  posts!: IPost[]

  // toggle button
  public show: boolean = false;
  public buttonName: string = 'Create Post';
  constructor(
    private activatedRoute: ActivatedRoute,
    private userService: UserService,
    private postServicerApi: PostAPIService,
  ) {
    this.activatedRoute.paramMap.subscribe((paramMap) => {
      this.receivedUserID = paramMap.get('id') || '1';
    });
  }
  ngOnInit() {
    this.userService.getUser(this.receivedUserID).subscribe((user) => this.user = user);
  }
  getPosts(id: number) {
    this.postServicerApi.getPostsByUserId(id).subscribe((posts) => this.posts = posts);
  }
  createPost(title: HTMLInputElement, body: HTMLInputElement, ) {
    this.postServicerApi.createPost(Number(this.receivedUserID), title.value, body.value).subscribe((post) => console.log(post));
  }
  toggle() {
    this.show = !this.show;
    // Change the name of the button.
    if (this.show)
      this.buttonName = "Hide";
    else
      this.buttonName = "Create Post";
  }
}
