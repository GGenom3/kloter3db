def hitungDenda(pinjaman):
	if pinjaman > 10:
		tl = pinjaman - 10
		bkpel = 1000 * tl
		novel = 2000 * tl
		cerpen = 1500 * tl
		total = bkpel + novel + cerpen
		print ('Meminjam selama : %i hari' %pinjaman)
		print ('Telat Mengembalikan : %i hari' %tl)
		print ('Denda buku mata pelajaran : %i' %bkpel)
		print ('Denda Novel : %i' %novel)
		print ('Denda Cerpen : %i' %cerpen)
		print ('Total : %i' %total)
	else:
		print ('Tepat waktu')

hitungDenda(14)
