CREATE VIEW detail_sp AS (

  SELECT ds.spesific_goal,k.pertanyaan,su.sub_unit,avg(ds.skor) total FROM
    detail_survey ds
  LEFT JOIN 
    kuesioner k 
  ON
    ds.nomor_soal=k.id
  LEFT JOIN
    sub_unit su
  ON 
    k.id_subunit=su.id

GROUP BY ds.spesific_goal,
         k.pertanyaan,
         su.sub_unit
);


CREATE VIEW detail_kuesioner AS (

  SELECT k.id,su.sub_unit,k.pertanyaan,k.A,k.B,k.C,k.D,k.E FROM
    kuesioner k
  LEFT JOIN
    sub_unit su
  ON 
    k.id_subunit=su.id
);

CREATE VIEW log_responden AS (

  SELECT j.tanggal,s.nama_responden,s.email FROM
    survey s
  LEFT JOIN
    jadwal j
  ON 
    s.id_jadwal = j.id
);