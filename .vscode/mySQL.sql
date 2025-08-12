-- 1.  Display total number of albums sold per artist
SELECT artist, COUNT(album) AS total_albums
FROM album_sales
GROUP BY artist;

-- 2.  Display combined album sales per artist
SELECT artist, SUM(sales) AS total_sales
FROM album_sales
GROUP BY artist;

-- 3.  Display the top 1 artist who sold most combined album sales
SELECT artist, SUM(sales) AS total_sales
FROM album_sales
GROUP BY artist
ORDER BY total_sales DESC
LIMIT 1;

-- 4.  Display the top 10 albums per year based on their number of sales
SELECT artist, YEAR(date_released) AS release_year,  album, sales
FROM album_sales
ORDER BY release_year, sales DESC
LIMIT 10;

-- 5.  Display list of albums based on the searched artist
SELECT artist, album, sales, date_released
FROM album_sales
WHERE artist = 'aespa';
