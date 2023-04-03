import { Component, EventEmitter, OnChanges, Output } from '@angular/core';
import { Post } from 'src/app/Models/post';
import { PostService } from 'src/app/Services/post.service';
import posts from '../../../assets/posts.json'

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnChanges {
  posts!: Array<Post>
  filteredArray!: Array<Post>
  // @Output() filter = new EventEmitter();
  constructor(private postService: PostService) {
    this.posts = postService.getPosts()
    this.filteredArray = this.posts;
  }
  ngOnChanges() {
  }
  filterPosts(el: HTMLInputElement) {
    this.filteredArray = this.posts.filter(post => post.creator.name == el.value)
    if (this.filteredArray.length <= 0) {
      console.log('filter is empty here is all posts : ')
      this.filteredArray = this.postService.getPosts()
    }
    // this.filter.emit(el.value)
    // console.log(this.posts = this.posts.filter(post => post.creator.name == el.value))
  }
}
