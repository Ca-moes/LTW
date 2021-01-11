import petpy
import os
import pandas as pd
import urllib.request
import urllib.error
from multiprocessing import Pool
from multiprocessing.dummy import Pool as ThreadPool

pf = petpy.Petfinder(key='64kzLueU0iYOqI4RiwILj8gHLm5WiQ5eHdiDgXGmRMrclFiKuy', secret='U5LQhC8hnvKDGsuCg4CIpMcQz1q5ohwtKrUpUPfB')

cat_dog = pf.breeds(types=['cat', 'dog'])
