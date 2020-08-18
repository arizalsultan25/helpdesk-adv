--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: migration; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE public.migration OWNER TO postgres;


--
-- Name: thread; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.thread (
    thread_id integer NOT NULL,
    title character varying(200) NOT NULL,
    description text NOT NULL,
    date date NOT NULL,
    status character varying(20),
    faq character varying
);


ALTER TABLE public.thread OWNER TO postgres;

--
-- Name: thread_thread_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.thread_thread_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.thread_thread_id_seq OWNER TO postgres;

--
-- Name: thread_thread_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.thread_thread_id_seq OWNED BY public.thread.thread_id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    auth_key character varying(32) NOT NULL,
    password_hash character varying(255) NOT NULL,
    password_reset_token character varying(255),
    email character varying(255) NOT NULL,
    status smallint DEFAULT 10 NOT NULL,
    created_at integer NOT NULL,
    updated_at integer NOT NULL,
    verification_token character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;


--
-- Name: answer answer_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answer ALTER COLUMN answer_id SET DEFAULT nextval('public.answer_answer_id_seq'::regclass);


--
-- Name: question question_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question ALTER COLUMN question_id SET DEFAULT nextval('public.question_question_id_seq'::regclass);


--
-- Name: thread thread_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.thread ALTER COLUMN thread_id SET DEFAULT nextval('public.thread_thread_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Data for Name: answer; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.answer (question, answer_id, email, answer, created_on, status) FROM stdin;
\.


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migration (version, apply_time) FROM stdin;
m000000_000000_base	1595825591
m130524_201442_init	1595825594
m190124_110200_add_verification_token_column_to_user_table	1595825594
m200722_084856_threadTable	1595825594
m200724_094439_create_question_table	1595825594
m200724_094801_create_answer_table	1595825594
\.


--
-- Data for Name: question; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.question (question_id, email, question, created_at) FROM stdin;
\.


--
-- Data for Name: thread; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.thread (thread_id, title, description, date, status, faq) FROM stdin;
2	Test Dummy	<p>asdasd\\</p>\r\n\r\n<p><img alt="logo" src="https://image.freepik.com/free-vector/set-company-logo-design-ideas-vector_53876-60292.jpg" style="height:625px; width:626px" /></p>\r\n\r\n<p>asdad</p>\r\n	2020-07-27	solved	\N
8	assa	<p>dddddddddddddddddddd</p>\r\n	2020-08-04	solved	\N
3	How  to Login to Sisma	<p>To get into sisma, you need to do authentification first. you can do it with these following steps :</p>\r\n\r\n<ol style="margin-left:40px">\r\n\t<li>Open <span style="color:#008080">https://</span><em><span style="color:#008080">els.sisma.online</span> </em>in your browser</li>\r\n\t<li>login with you username and password</li>\r\n\t<li>if your authentification was successfull, you will receive OTP</li>\r\n\t<li>type your OTP correctly and you are logged in to ELS.SISMA</li>\r\n</ol>\r\n	2020-08-04	solved	yes
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, username, auth_key, password_hash, password_reset_token, email, status, created_at, updated_at, verification_token) FROM stdin;
1	kentang	448uciJQQ4CS1K4yz9GiXQdJq77boBZe	$2y$13$sF6.cNAx170nK1odLvAH2e2YgKAcv2egNY38H2Q3tT31FQuqR20XC	\N	kentang@gmail.com	10	1595825702	1595825702	128ar4DOVV4asEgL_m28vCcf_RLjfBNP_1595825702
\.


--
-- Name: thread_thread_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.thread_thread_id_seq', 8, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 1, true);


--
-- Name: migration migration_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);



--
-- Name: thread thread_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.thread
    ADD CONSTRAINT thread_pkey PRIMARY KEY (thread_id);


--
-- Name: user user_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_email_key UNIQUE (email);


--
-- Name: user user_password_reset_token_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_password_reset_token_key UNIQUE (password_reset_token);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user user_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);



--
-- PostgreSQL database dump complete
--

