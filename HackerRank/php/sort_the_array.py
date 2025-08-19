def min_operations_to_sort(arr):    

    unique_elements = set(arr)
    positions = {element: [] for element in unique_elements}
    for index, value in enumerate(arr):
        positions[value].append(index)
    sorted_arr = sorted(arr)
    sorted_positions = {element: [] for element in unique_elements}
    for index, value in enumerate(sorted_arr):
        sorted_positions[value].append(index)   
    operations = 0
    for element in unique_elements:
        if positions[element] != sorted_positions[element]:
            operations += 1
    return operations       

def sort_the_array(test_cases):
    results = []
    for _ in range(test_cases):
        n = int(input())
        arr = list(map(int, input().split()))
        result = min_operations_to_sort(arr)
        results.append(result)
    return results

# Example usage
if __name__ == "__main__":
    t = int(input())
    results = sort_the_array(t)
    for res in results:
        print(res)