import re

with open('./assets/transcript.txt', 'r') as file:
    print('Minifying transcript...')
    friendly_string = file.read().replace('\n', '\\n')
    friendly_transcript_file = open('./assets/transcript-minified.txt', 'w')
    friendly_transcript_file.write(friendly_string)
    print('Done!')
