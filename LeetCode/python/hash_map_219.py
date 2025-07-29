def containsNearDuplicate(nums, k):
    """
    Returns True if there are two identical numbers in the array 'nums'
    such that their indices are at most 'k' apart.

    Uses a hash map to store the last index of each number.
    For each number, if it has been seen before and the difference
    between the current index and the previous index is <= k,
    returns True. Otherwise, updates the index in the map.
    """
    # Step 1: Create a dictionary to store the last index of each number
    num_map = {}
    
    # Step 2: Iterate through the list with index and value
    for i, num in enumerate(nums):
        # Step 3: If the number has been seen before
        if num in num_map:
            # Step 4: Check if the previous index is within k distance
            if i - num_map[num] <= k:
                # Step 5: If yes, return True (found a near duplicate)
                return True
        # Step 6: Update the last index of the number
        num_map[num] = i
    
    # Step 7: If no such pair is found, return False
    return False


print(containsNearDuplicate([1, 2, 3, 1], 3))  # Output: True