const { ApolloServer, gql } = require("apollo-server");
const postTypes = require("./typeDefs/post");
const userTypes = require("./typeDefs/user");

const users = [
  { name: "ahmed", dob: "1998" },
  { name: "ali", dob: "1899" },
  { name: "hassan", dob: "1993" },
  { name: "hussien", dob: "1998" },
  { name: "mohamed", dob: "1899" },
  { name: "ibrahim", dob: "1993" },
  { name: "mina", dob: "1998" },
  { name: "islam", dob: "1899" },
  { name: "fouad", dob: "1993" },
];

const posts = [
  { id: 1, title: "New post", content: "post content" },
  { id: 2, title: "New post 2", content: "post content 2" },
  { id: 3, title: "New post 3", content: "post content 3" },
];

const userPost = {
  1: { fullname: "Youssef", email: "yfathy2092@gmaul.com", dob: "1989" },
  2: { fullname: "ahmed", email: "ahmed@gmaul.com", dob: "2000" },
  3: { fullname: "hassan", email: "hassan@gmaul.com", dob: "2000" },
};

const PostComments = {
  1: [{ title: "great", content: "great post" }],
  2: [{ title: "amazing", content: "amazing" }],
  3: [{ title: "gamed", content: "gamed" }],
};

const fetchUsersFromDB = async () => {
  console.log("Fetching users from db");
  return users;
};

const fetchPostsFromDB = async () => {
  console.log("fetching posts from db");
  return users.map((user) => {
    return {
      ...user,
      posts,
    };
  });
};

const typeDefs = gql`
  type Article {
    id: ID!
    title: String!
    content: String!
    author: User!
    comments: [Comment!]!
  }

  type User {
    fullname: String!
    email: String!
    dob: String!
  }

  type Comment {
    title: String!
    content: String!
  }

  input ArticleInput {
    id: String!
    title: String!
    content: String!
  }

  type Query {
    articles: [Article!]!
    article(id: Int!): Article
  }

  type Mutation {
    createArticle(input: ArticleInput): Article
  }
`;

// Define the resolvers
const resolvers = {
  Query: {
    articles: () => {
      return posts;
    },
    article: (parent, { id }) => {
      // console.log(id);
      const postID = posts.filter((post) => post.id == id)[0];
      return postID;
    },
  },
  Mutation: {
    createArticle: (_, args) => {
      // console.log("contextValue: ", contextValue);
      // if (!contextValue.isLogged) throw new Error("Unauthorized");
      console.log(args.input);
      posts.push(args.input);
      return args.input;
    },
  },
  Article: {
    author: (parent) => {
      console.log(parent.id);
      return userPost[parent.id];
    },
    comments: (parent) => {
      return PostComments[parent.id];
    },
  },
};

const server = new ApolloServer({
  typeDefs: [typeDefs],
  resolvers,
  context: ({ req }) => {
    // VERIFY TOKEN
    if (req.headers.authorization === "123456")
      return {
        isLogged: true,
      };
    return {
      isLogged: false,
    };
  },
});

server.listen(3001).then(({ port }) => console.log("started server on ", port));

// const resolvers = {
//   Mutation: {
//     createUser: (_, args, contextValue) => {
//       console.log('contextValue: ', contextValue);
//       if (!contextValue.isLogged) throw new Error('Unauthorized');
//       users.push(args.input);
//       return args.input;
//     },

//   },
//   Query: {
//     // profile: getProfile,
//     allUsers: async (parent, args, contextValue) => {
//       console.log('contextValue: ', contextValue);
//       const users = await fetchUsersFromDB();
//       return users;
//     },
//     search: (_, args) => {
//       return [...users, ...posts];
//     }
//   },
//   SearchResult: {
//     __resolveType(parent) {
//       console.log("parent:", parent);
//       if (parent.name) {
//         return "User"
//       } else {
//         return "Post"
//       }
//     }
//   },
//   User: {
//     posts: (parent, args) => {
//       return usersPosts[parent.name];
//     }
//   },
// }
