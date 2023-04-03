import { Injectable } from '@angular/core';
import post from '../../assets/posts.json'
import { Post } from '../Models/post';
@Injectable({
  providedIn: 'root'
})
export class PostService {

  posts: Array<Post>

  constructor() {
    this.posts = post
  }

  getPosts() {
    return this.posts;
  }

  getPostById(id: number) {
    return this.posts.filter(post => post.id === id)[0]
  }

}
