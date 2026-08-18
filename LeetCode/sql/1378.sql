SELECT 
    uni.unique_id, 
    em.name 
FROM Employees AS em
LEFT JOIN EmployeeUNI AS uni
    ON em.id = uni.id;