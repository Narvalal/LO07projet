SELECT   COUNT(*) AS nbr_doublon, email
FROM     nounou
GROUP BY email
HAVING   COUNT(*) > 1

DELETE t1 
FROM nounou AS t1, nounou AS t2
WHERE t1.id_nounou > t2.id_nounou
AND t1.email = t2.email