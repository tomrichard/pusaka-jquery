# Response

Format response yang direkomendasikan adalah sebagai berikut.

Response dalam bentuk ``` json ```

```json
{
	"status" : 1000,
	"current" : 1,
	"count" : 6,
	"total" : 3,
	"rows" : [
		{
			"Id":"0001",
			"Lang":"ID",
			"Name":"Name001",
			"Status":"Active"
		},
		{
			"Id":"0002",
			"Lang":"EN",
			"Name":"Name002",
			"Status":"Deactive"
		}
	]
}
```

## status

``` 1000 ``` : success

``` 2000 ``` : error

## current

nomor page yang ditampilkan.

## count 

jumlah total seluruh record atau row yang ditemukan.

## total

jumlah page keseluruhan.

## rows

record atau data dari table. 