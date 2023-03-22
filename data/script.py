with open("ml-latest-small/movies.csv", encoding="utf8") as movies_file:
    lines = [line.strip() for line in movies_file.readlines()][1:]


for line in lines:
    try:
        movie_id, movie_name, movie_categories = line.split(",")
        sql_query = "INSERT INTO movies (id, name, categories) VALUES ({}, '{}', '{}');".format(movie_id, movie_name, movie_categories)
        with open("insert_movies.txt", "a", encoding="utf8") as insert_movies:
            insert_movies.write(sql_query + "\n") 
    except Exception as exc:
        pass
    
with open("ml-latest-small/ratings.csv", encoding="utf8") as ratings_file:
    lines = [line.strip() for line in ratings_file.readlines()][1:]

for line in lines:
    try:
        userId, movieId, rating, timestamp = line.split(",")
        
        sql_query = "INSERT INTO ratings (userId, movieId, rating, timestamp) VALUES ({}, {}, {}, {});".format(userId, movieId, rating, timestamp)

        with open("insert_ratings.txt", "a", encoding="utf8") as insert_ratings:
            insert_ratings.write(sql_query + "\n")
    except Exception as exc:
        pass
    
#jeszcze trzeba poprawić problem z apostrofami w tytule filmu bo zamykają inne otwarte apostrofy

with open("ml-latest-small/tags.csv", encoding="utf8") as ratings_file:
    lines = [line.strip() for line in ratings_file.readlines()][1:]

for line in lines:
    try:
        userId,movieId,tag,timestamp = line.split(",")
        
        sql_query = "INSERT INTO tags (userId, movieId, tag) VALUES ({}, {}, '{}');".format(userId, movieId, tag)

        with open("insert_tags.txt", "a", encoding="utf8") as insert_tags:
            insert_tags.write(sql_query + "\n")
    except Exception as exc:
        pass
    