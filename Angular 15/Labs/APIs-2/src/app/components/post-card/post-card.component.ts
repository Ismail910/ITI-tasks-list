import { Component, Input, OnChanges, OnInit } from '@angular/core';
import { IPost } from 'src/app/Models/ipost';
import { Post } from 'src/app/Models/post';
import { CommentService } from 'src/app/Services/comment.service';
import { PostAPIService } from 'src/app/Services/post-api.service';
import { PostService } from 'src/app/Services/post.service';
import { Comment } from '../../Models/comment';
@Component({
  selector: 'app-post-card',
  templateUrl: './post-card.component.html',
  styleUrls: ['./post-card.component.css']
})
export class PostCardComponent implements OnChanges {
  @Input('id') id!: number
  // post!: Post;
  post!: IPost
  comments!: Array<Comment>
  // toggle button
  public show: boolean = false;
  public buttonName: string = 'Show Comments';
  constructor(
    // private postService: PostService,
    private postServicerApi: PostAPIService,
    private commentService: CommentService
  ) { }
  ngOnChanges() {
    this.postServicerApi.getPostById(this.id).subscribe((post) => this.post = post)
  }
  showComments(postId: number) {
    this.commentService.getAllComments(postId).subscribe((comments) => this.comments = comments)
    this.show = !this.show;
    // Change the name of the button.
    if (this.show)
      this.buttonName = "Hide";
    else
      this.buttonName = "Show Comments";
  }
  followMe(post: Post) {
    let follow = post.creator.isFollowing;
    post.creator.isFollowing = !follow;
  }
  // isFollowing(e: boolean) {
  // let a = e.target as HTMLAnchorElement
  // if (a.innerHTML === "Follow") {
  //   console.log(a.innerHTML)
  //   a.innerHTML = "UnFollow";
  //   a.className = 'btn btn-danger'
  // } else {
  //   a.innerHTML = 'Follow';
  //   a.className = 'btn btn-success'
  // }
  // }




}
