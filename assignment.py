iterations = input()

if iterations.isdigit() and int(iterations) > 0:
    iterations = int(iterations)
    pi = 0
    for i in range(iterations):
        pi += (-1)**i / (2 * i + 1)
    print(4 * pi)
else:
    print("Error")