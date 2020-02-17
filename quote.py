import requests
from bs4 import BeautifulSoup

URL = "https://www.brainyquote.com/quote_of_the_day"
r = requests.get(URL)

soup = BeautifulSoup(r.content, 'html5lib')

table = soup.find('body')

#table.find('div', attrs={'class':'Other-StoryCard'})

for row in table.findAll('img', attrs={'class':'Other-StoryCard'}):
    print("<h6>",row.h3.text,"</h6>")
    print("\n\n")

