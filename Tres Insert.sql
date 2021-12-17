INSERT INTO `crud`.`deparment`
(
`DepartmentName`,`created_at`,`updated_at`)
VALUES
("Recursos humanos","2021-12-15 13:51:21","2021-12-15 13:51:21"),
("Administración","2021-12-15 13:51:21","2021-12-15 13:51:21"),
("Tecnología ","2021-12-15 13:51:21","2021-12-15 13:51:21");


INSERT INTO `crud`.`study`
(`StudyName`)
VALUES
("Nivel universitario"), 
("Nivel medio"),
("Maestrías"),
("Sin estudios");

INSERT INTO `crud`.`employee`
(`EmployeeName`,
`EmployeeLastname`,
`DepartmenId`,
`StudyId`,
`Sexo`,
`Idnumber`,
`Address`,
`HomePhone`,
`MobilePhone`,
`BaseSalary`,
`Disconunt`,
`NetSalary`)
VALUES
("Juan",
"Roll Mike",
   1,
   2,
   1,
0000000000,
"Aqui",
"809-000-0000",
"809-000-0000",
12.05,
3333.33,
99.99),


("Pepe",
"Rosa Milos",
   2,
   3,
   1,
0000000000,
"Aqui",
"809-000-0000",
"809-000-0000",
12.05,
3333.33,
99.99),

("Maria",
"Ross",
   1,
   2,
   0,
0000000000,
"Aqui",
"809-000-0000",
"809-000-0000",
12.05,
3333.33,
99.99);



