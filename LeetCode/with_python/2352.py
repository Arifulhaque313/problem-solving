class Solution:
    def equalPairs(self, grid: List[List[int]]) -> int:
        n= len(grid)
        row_count = {}
        count = 0

        for row in grid:
            row_tuple = tuple(row)
            row_count[row_tuple] = row_count.get(row_tuple, 0)+1

        for j in range(n): 
            col = [grid[i][j] for i in range(n)]
            col_tuple = tuple(col)
            if col_tuple in row_count: 
                count+=row_count[col_tuple]

        return count