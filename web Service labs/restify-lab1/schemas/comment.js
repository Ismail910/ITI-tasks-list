module.exports = {
    type: "object",
    required: ["post", "content", "author"],
    properties: {
      content: {
        type: "string"
      }
    }
  }