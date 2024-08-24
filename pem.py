import os
import math

# Create 'result' directory if it doesn't exist
if not os.path.exists('result'):
    os.makedirs('result', 0o777)

# Get input for the list file and divide number
list_file = input("list: ").strip()
div = int(input("Divide: ").strip())

# Read the content of the list file
with open(list_file, "r") as file:
    lines = file.readlines()

# Get the total number of lines
total_list = len(lines)
print("=================")
print(f"Total list: {total_list}")

# Check if the divide number is greater than the total list
if div > total_list:
    exit("Div cannot be greater than the total list")

# Calculate the chunk size
divide = math.ceil(total_list / div)

# Split the list into chunks
chunks = [lines[i:i + divide] for i in range(0, len(lines), divide)]

# Process each chunk and save it to a file in the 'result' directory
for i, chunk in enumerate(chunks):
    print(f"Processing no {i + 1}")
    with open(f'result/{i + 1}.txt', "w") as f:
        f.writelines(chunk)

print("Result saved into 'result' folder")
