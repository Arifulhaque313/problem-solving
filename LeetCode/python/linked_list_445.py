from typing import Optional

class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

    @staticmethod
    def reverseList(head):
        prev = None
        curr = head
        while curr:
            next_temp = curr.next
            curr.next = prev
            prev = curr
            curr = next_temp
        return prev

    @staticmethod
    def addTwoNumbers(l1, l2):
        l1 = ListNode.reverseList(l1)
        l2 = ListNode.reverseList(l2)

        carry = 0
        head = None

        while l1 or l2 or carry:
            val1 = l1.val if l1 else 0
            val2 = l2.val if l2 else 0
            total = val1 + val2 + carry
            carry = total // 10
            new_node = ListNode(total % 10)
            new_node.next = head
            head = new_node

            if l1:
                l1 = l1.next
            if l2:
                l2 = l2.next

        return head

# Helper function to print linked list
def print_list(node):
    while node:
        print(node.val, end=" -> ")
        node = node.next
    print("None")

# Example usage:
l1 = ListNode(7, ListNode(2, ListNode(4, ListNode(3))))
l2 = ListNode(5, ListNode(6, ListNode(4)))
result = ListNode.addTwoNumbers(l1, l2)
print_list(result)  # Output: 7 -> 8 -> 0 -> 7
