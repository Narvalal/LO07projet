DELETE t1 
FROM compte AS t1, compte AS t2
WHERE t1.id_utilisateur < t2.id_utilisateur
AND t1.login = t2.login