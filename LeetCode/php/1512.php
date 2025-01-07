<?php
    function GoodPairs($nums)
    {
        // Given an array of integers nums, return the number of good pairs.

        // A pair (i, j) is called good if nums[i] == nums[j] and i < j.

        // Example 1:

        // Input: nums = [1,2,3,1,1,3]
        // Output: 4
        // Explanation: There are 4 good pairs (0,3), (0,4), (3,4), (2,5) 0-indexed.
        
        $n = count($nums);
        $count = 0;
        for($i = 0; $i < $n; $i++)
        {
            for($j = 0; $j < $n; $j++){
                if($nums[$i] == $nums[$j] && $i < $j){
                    $count++;
                }
            }
        }
        
        return $count;
    }

    GoodPairs([1,2,3,1,1,3]);
?>