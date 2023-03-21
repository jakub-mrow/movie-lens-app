with open("ml-latest-small/movies.csv") as movies_file:
    lines = [line.strip() for line in movies_file.readlines()][1:]


for line in lines:
    try:
        movie_id, movie_name, movie_categories = line.split(",")
    except Exception as exc:
        pass
    sql_query = "INSERT INTO movies (id, name, categories) VALUES {} '{}' '{}'".format(movie_id, movie_name, movie_categories)
    with open("insert_movies.txt", "a") as insert_movies:
        insert_movies.write(sql_query + "\n") 


with open("ml-latest-small/ratings.csv") as ratings_file:
    lines = [line.strip() for line in ratings_file.readlines()][1:]

for line in lines:
    try:
        userId, movieId, rating, timestamp = line.split(",")
    except Exception as exc:
        pass
    sql_query = "INSERT INTO ratings (userId, movieId, rating, timestamp) VALUES {} {} {} {}".format(userId, movieId, rating, timestamp)

    with open("insert_ratings.txt", "a") as insert_ratings:
        insert_ratings.write(sql_query + "\n")


with open("ml-latest-small/tags.csv") as ratings_file:
    lines = [line.strip() for line in ratings_file.readlines()][1:]

for line in lines:
    try:
        userId,movieId,tag,timestamp = line.split(",")
    except Exception as exc:
        pass
    sql_query = "INSERT INTO tags (userId, movieId, tag) VALUES {} {} '{}'".format(userId, movieId, tag)

    with open("insert_tags.txt", "a") as insert_tags:
        insert_tags.write(sql_query + "\n")

 
