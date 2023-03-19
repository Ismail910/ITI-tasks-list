import random
import webbrowser

websites = ["google.com", "facebook.com", "youtube.com", "amazon.com", "twitter.com"]
res = random.choice(websites)
webbrowser.open("http://" + res)