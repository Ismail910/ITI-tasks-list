import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { User } from '../Models/user';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  // users!: Array<User>
  constructor(private http: HttpClient) {

  }

  getAllUsers() {
    return this.http.get<User[]>('https://jsonplaceholder.typicode.com/users');
  }

  getUser(id: string) {
    return this.http.get<User>(
      'https://jsonplaceholder.typicode.com/users/' + id,
      {
        headers: new HttpHeaders().set('Authorization', 'secret token'),
      }
    );
  }

}
