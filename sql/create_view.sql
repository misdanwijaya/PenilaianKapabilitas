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


CREATE VIEW detail_kuesioner2 AS (

  SELECT k.id,su.sub_unit,aps.nama,k.pertanyaan,k.A,k.B,k.C,k.D,k.E FROM
    kuesioner k
  LEFT JOIN
    sub_unit su
  ON 
    k.id_subunit=su.id
  LEFT JOIN
    area_proses_spesifik aps
  ON 
    k.id_area_proses_spesifik=aps.id
);

CREATE VIEW detail_aps AS (

  SELECT aps.id,ap.id id_area_proses,ap.area_proses,sg.nama_spesific_goal,aps.rataan FROM
    area_proses_spesifik aps
  LEFT JOIN
    area_proses ap
  ON 
    ap.id = aps.id_area_proses
  LEFT JOIN
    spesific_goal sg
  ON 
    sg.id = aps.id_spesific_goal
);

CREATE VIEW log_responden AS (

  SELECT j.tanggal,s.nama_responden,s.email FROM
    survey s
  LEFT JOIN
    jadwal j
  ON 
    s.id_jadwal = j.id
);