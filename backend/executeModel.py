import sys
import gensim
from gensim.models import Word2Vec

# element 1 of command line (python executeModel.py $word_text)
word = sys.argv[1]

smodel = gensim.models.Word2Vec.load("text8.model")
page = (smodel.most_similar(word))
# join all items in a list
values = "".join(str(v) for v in page)
print values
