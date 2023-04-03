import { Creator } from "./creator";

export interface Post {
    id: number;
    title: string;
    content: string;
    image: string;
    createdAt: string;
    likes: string;
    creator: Creator;
}
