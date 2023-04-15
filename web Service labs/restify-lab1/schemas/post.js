module.exports = {
  type: "object",
  required: ["title", "content", "author"],
  properties: {
    title: {
      type: "string"
    },
    content: {
      type: "string"
    }
  }
}