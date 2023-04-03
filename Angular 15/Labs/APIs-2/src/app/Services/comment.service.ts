import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Comment } from '../Models/comment'
@Injectable({
  providedIn: 'root'
})
export class CommentService {
  comments!: Array<Comment>

  constructor(private http: HttpClient) { }
  getAllComments(postId: number) {
    console.log(postId);
    return this.http.get<Comment[]>(`https://jsonplaceholder.typicode.com/posts/${postId}/comments`);
  }
}
