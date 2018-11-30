SELECT   COUNT(*) AS nbr_doublon, email
FROM     nounou
GROUP BY email
HAVING   COUNT(*) > 1

DELETE t1 
FROM parent AS t1, parent AS t2
WHERE t1.id_parent > t2.id_parent
AND t1.email = t2.email