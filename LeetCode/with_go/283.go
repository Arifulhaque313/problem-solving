package main

func moveZeroes(nums []int) []int {
	count := len(nums)
	left := 0

	for right := 0; right < count; right++ {
		if nums[right] != 0 {
			temp := nums[left]
			nums[left] = nums[right]
			nums[right] = temp
			left++
		}
	}

	return nums
}

func main() {
	nums := []int{0, 1, 2, 3, 4, 12, 0, 4}

	moveZeroes(nums)
}
