class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def detectCycle(self, head: ListNode) -> ListNode:
        if not head:
            return None
        
        slow = fast = head 

        while fast and fast.next:
            slow = slow.next 
            fast = fast.next.next 

            if slow == fast: 
                break
        else: 
            return None 
            
        slow = head 
        while slow != fast:
            slow = slow.next 
            fast = fast.next
        
        return slow

# Example usage:
node1 = ListNode(3)
node2 = ListNode(2)
node3 = ListNode(0)
node4 = ListNode(-4)
node1.next = node2
node2.next = node3
node3.next = node4
node4.next = node2
solution = Solution()
start_of_cycle = solution.detectCycle(node1)
if start_of_cycle:
    print(start_of_cycle.val)  # Output: 2
else:
    print("No cycle detected")  
# Output: 2