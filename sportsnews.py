import requests
from bs4 import BeautifulSoup

URL = "https://www.thehindu.com/sport/"
r = requests.get(URL)

soup = BeautifulSoup(r.content, 'html5lib')

table = soup.find('body')

#table.find('div', attrs={'class':'Other-StoryCard'})

for row in table.findAll('div', attrs={'class':'Other-StoryCard'}):
    print("<h6>",row.h3.text,"</h6>")
    print("\n\n")

