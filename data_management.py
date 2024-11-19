import sys

print("Welcome...")

# Step 1: Retrieve values from command-line arguments or prompt for input if not provided
if len(sys.argv) == 6:
    print("The elements of the list are complete...")
    try:
        numbers = [int(arg) for arg in sys.argv[1:]]
        print("Numbers:", numbers)
    except ValueError:
        print("Error: All inputs must be numeric.")
        sys.exit(1)
else:
    print("Using interactive input...")
    numbers = []
    for param in ['a', 'b', 'c', 'd', 'e']:
        while True:
            try:
                value = int(input(f"Enter value for {param}: "))
                numbers.append(value)
                break
            except ValueError:
                print("Please enter a valid number.")
    print("Numbers:", numbers)

# Step 2: Check if any value is negative
if any(num < 0 for num in numbers):
    print("Error: Negative values detected.")
    sys.exit(1)

# Step 3: Calculate the average and check if it's greater than 50
average = sum(numbers) / len(numbers)
avg_message = f"The average is {average} and it is {'greater' if average > 50 else 'not greater'} than 50."
print(avg_message)

# Step 4: Count positive numbers and check if the count is even or odd using bitwise operations
positive_count = sum(1 for num in numbers if num > 0)
parity_message = f"The count of positive numbers is {'even' if positive_count & 1 == 0 else 'odd'}."
print(parity_message)

# Step 5: Create a new list with values greater than 10, sort it, and return both lists
filtered_sorted_list = sorted([num for num in numbers if num > 10])
print("Filtered and Sorted List:", filtered_sorted_list)

# Step 6: Display results in an HTML format
print("""
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Management Results</title>
</head>
<body>
    <h1>Results</h1>
    <p>Original List: {}</p>
    <p>Filtered and Sorted List (values > 10): {}</p>
    <p>{}</p>
    <p>{}</p>
</body>
</html>
""".format(numbers, filtered_sorted_list, avg_message, parity_message))