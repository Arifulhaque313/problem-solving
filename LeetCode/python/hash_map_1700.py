from collections import Counter
def countStudents(students,sandwiches) :
    studentCount = len(students)
    studentHashMap = Counter(students)

    for i in sandwiches:
        if studentHashMap[i] > 0:
            studentCount -= 1
            studentHashMap[i] -= 1
        else:
            return studentCount

    return studentCount


result = countStudents([1,1,0,0],[0,1,0,0])
print(result)