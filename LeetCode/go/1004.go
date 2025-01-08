package main

import (
	"fmt"
)

// Function to find the maximum number of consecutive 1s in a binary array
// after flipping at most k 0s to 1s.
func longestOnes(nums []int, k int) int {
	maxCount := 0
	zeroCount := 0
	left := 0

	for right := 0; right < len(nums); right++ {
		if nums[right] == 0 {
			zeroCount++
		}

		// Shrink the window if the count of zeros exceeds k
		for zeroCount > k {
			if nums[left] == 0 {
				zeroCount--
			}
			left++
		}

		// Update the maximum length of the window
		maxCount = max(maxCount, right-left+1)
	}

	return maxCount
}

// Helper function to get the maximum of two integers
func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}

// Main function to test the `longestOnes` function
func main() {
	nums := []int{1, 1, 0, 0, 1, 1, 1, 0, 1}
	k := 2
	result := longestOnes(nums, k)
	fmt.Printf("The maximum number of consecutive 1s after flipping at most %d zeros is: %d\n", k, result)
}
