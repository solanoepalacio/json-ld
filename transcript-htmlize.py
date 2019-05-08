import re

with open('transcript.txt', 'r') as file:
    # friendly_string = '\\n'.join(
    #     [line for line in file if line is not '\\n']
    # )
    friendly_string = file.read().replace('\n', '\\n')
    friendly_transcript_file = open('./friendly-transcript.txt', 'w')
    friendly_transcript_file.write(friendly_string)

    print('done')