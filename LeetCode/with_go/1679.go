package main

import (
	"sort"
)

func maxOperations(num []int, k int) int {
	count := 0
	sort.Ints(num)

	for left, right := 0, len(num)-1; left < right; {
		if num[left]+num[right] == k {
			count++
			left++
			right--
		} else if num[left]+num[right] < k {
			left++
		} else if num[left]+num[right] > k {
			right--
		}

	}

	return count
}

func main() {

	b := []int{1, 2, 3, 4, 5}
	k := 5
	maxOperations(b, k)
}
