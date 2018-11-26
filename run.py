import subprocess
import sys

def writeCommand(line):
  if 'sentence1: <s>' in line:
    index = line.find('<s>') + 4

    data = ''
    while line[index] != '<':
      data += line[index]
      index += 1

    data = data[:-1]  

    with open('data.txt', 'w') as f:
      f.write(data)

    print(data)

if(len(sys.argv) > 0):
  command = ['julius-4.3.1', '-input', 'rawfile', '-filelist', 'list.txt', '-C', 'voxforge/manual/ina.jconf']
  process = subprocess.Popen(command, stdout=subprocess.PIPE, shell=True);

  while True:
    line = process.stdout.readline()
    line = line.decode('utf-8')

    if line:
      print(line)
      writeCommand(line)

else:
  command = ['julius-4.3.1', '-input', 'mic', '-C', 'voxforge/manual/ina.jconf']
  process = subprocess.Popen(command, stdout=subprocess.PIPE, shell=True);

  while True:
    line = process.stdout.readline()
    line = line.decode('utf-8')

    if line:
      writeCommand(line)
