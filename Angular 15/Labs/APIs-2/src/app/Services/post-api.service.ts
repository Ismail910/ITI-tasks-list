import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { IPost } from '../Models/ipost';
import { Post } from '../Models/post';

@Injectable({
  providedIn: 'root'
})
export class PostAPIService {
  posts!: Array<IPost>

  constructor(private http: HttpClient) { }


  getAllPosts() {
    return this.http.get<IPost[]>('https://jsonplaceholder.typicode.com/posts');
  }
  getPostsByUserId(userId: number) {
    return this.http.get<IPost[]>(`https://jsonplaceholder.typicode.com/posts?userId=${userId}`);
  }
  getPostById(id: number) {
    return this.http.get<IPost>(`https://jsonplaceholder.typicode.com/posts/${id}`);
  }
  createPost(userId: number,title:string,body:string) {
    return this.http.post<IPost>('https://jsonplaceholder.typicode.com/posts',{userId:userId,title:title,body:body})
  }
}
