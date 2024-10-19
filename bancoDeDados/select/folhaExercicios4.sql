--FOLHA DE EXERCÍCIOS 4

--ATIVIDADE 1

SELECT LOGTIPO AS "TIPO DE LOGRADOURO",
       LOGDESCRICAO AS "DESCRIÇÃO DO LOGRADOURO",
	   PESNOME AS "NOME DA PESSOA"
  FROM TREINA.TBLOGRADOURO
  JOIN TREINA.TBPESSOA
    ON TBLOGRADOURO.LOGCODIGO = TBPESSOA.LOGCODIGO;

--ATIVIDADE 2

SELECT PESNOME AS "NOME DA PESSOA",
       TBIMOVEL.IMVCODIGO AS "CÓDIGO DO IMÓVEL",
	   IMVDESCRICAO AS "DESCRIÇÃO DO IMÓVEL"
  FROM TREINA.TBPESSOA
  LEFT JOIN TREINA.TBPESSOAIMOVEL
    ON TBPESSOA.PESCODIGO = TBPESSOAIMOVEL.PESCODIGO
  LEFT JOIN TREINA.TBIMOVEL
    ON TBPESSOAIMOVEL.IMVCODIGO = TBIMOVEL.IMVCODIGO;

--ATIVIDADE 3

SELECT PESNOME AS "NOME DA PESSOA",
               CTPDESCRICAO AS "TIPO DE CONTATO",
	   CTPNUMERO AS "NÚMERO DE CONTATO"
  FROM TREINA.TBPESSOACONTATO
INNTER JOIN TREINA.TBPESSOA
       ON TBPESSOACONTATO.PESCODIGO = TBPESSOA.PESCODIGO
 WHERE CTPNUMERO LIKE ('47%')
 ORDER BY PESNOME ASC;

--ATIVIDADE 4

SELECT PESNOME AS "NOME DA PESSOA",
	   CTPNUMERO AS "NÚMERO DE CONTATO",
	   IMVDESCRICAO AS "DESCRIÇÃO DO IMÓVEL",
	   (IMVLARGURA * IMVCOMPRIMENTO) AS "ÁREA DO IMÓVEL",
	   LOGTIPO AS "TIPO DE LOGRADOURO",
	   LOGDESCRICAO AS "DESCRIÇÃO DO LOGRADOURO"
  FROM TREINA.TBPESSOA
  LEFT JOIN TREINA.TBPESSOAIMOVEL
    ON TBPESSOA.PESCODIGO  = TBPESSOAIMOVEL.PESCODIGO
  LEFT JOIN TREINA.TBIMOVEL
    ON TBPESSOAIMOVEL.IMVCODIGO = TBIMOVEL.IMVCODIGO
  LEFT JOIN TREINA.TBLOGRADOURO
    ON TBLOGRADOURO.LOGCODIGO = TBIMOVEL.LOGCODIGO
  LEFT JOIN TREINA.TBPESSOACONTATO
	ON TBPESSOACONTATO.PESCODIGO = TBPESSOA.PESCODIGO
 ORDER BY PESNOME ASC;



--ATIVIDADE 5

SELECT PESNOME AS "NOME DA PESSOA",
       (SELECT COUNT(*) FROM TREINA.TBPESSOACONTATO
	     WHERE TBPESSOACONTATO.PESCODIGO = TBPESSOA.PESCODIGO)
  FROM TREINA.TBPESSOA;