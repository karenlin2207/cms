--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.5
-- Dumped by pg_dump version 9.5.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: contents; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE contents (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    uri_name character varying(255) NOT NULL,
    content_first text,
    content text,
    img_uri character varying(255),
    has_first_part boolean NOT NULL,
    last_update_user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE contents OWNER TO homestead;

--
-- Name: contents_id_seq; Type: SEQUENCE; Schema: public; Owner: homestead
--

CREATE SEQUENCE contents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE contents_id_seq OWNER TO homestead;

--
-- Name: contents_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: homestead
--

ALTER SEQUENCE contents_id_seq OWNED BY contents.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO homestead;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: homestead
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO homestead;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: homestead
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO homestead;

--
-- Name: users; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE users OWNER TO homestead;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: homestead
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO homestead;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: homestead
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY contents ALTER COLUMN id SET DEFAULT nextval('contents_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: contents; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY contents (id, title, uri_name, content_first, content, img_uri, has_first_part, last_update_user_id, created_at, updated_at) FROM stdin;
1	關於我們	about_us	<div class="col-sm-4 border-right "><h4>◆專業調解</h4><p>梁氏資產管理有限公司服務覆蓋中港台，提供專業的個人或商業糾紛處理，商業債務催收服務及專業調解服務，以迎合不同客戶之需求，隨時為企業提供方便快捷的優質服務。</p></div><div class="col-sm-4 border-right padding-left"><h4>◆服務到底</h4><p>我們也會關注各個流程，由催款到解決爭議，監察分期償還債務狀況到收回款項。如果催收未能成功，我們會迅速及專業把催收處理程序提昇至法律行動，並向您提供意見。</p></div><div class="col-sm-4 padding-left"><h4>◆顧客至上</h4><p>和客戶建立良好關係是我們的目標，我們的賬務管理專家將為您提供一站式專業服務及意見，能迅速協助客戶處理各地的商務糾紛或信用調查，收回各項壞賬，增加企業盈利及競爭能力。</p></div>	<div class="col-sm-12 padding-bottom"><h3>聯絡方法</h3></div><div class="col-sm-12 padding-bottom"><div class="col-sm-5" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.146302236387!2d114.18581581499524!3d22.31030603531842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400dedd853dcf%3A0x25eb7305dae813c6!2z6aaZ5riv57SF56Oh6aas6aCt5ZyN6YGTMzctMznomZ_ntIXno6HllYbmpa3kuK3lv4NB5bqn!5e0!3m2!1szh-TW!2stw!4v1498187647050" frameborder="0" style="border:0" allowfullscreen=""></iframe></div><div class="col-sm-7 padding-none contact"><div class="col-sm-12 margin-bottom"><div class="col-sm-4 border-right"><img src="/front/About us/Phone.png"/>852 2780 0400</div><div class="col-sm-4 border-right"><img src="/front/About us/Whatsapp.png"/>6444 4330</div><div class="col-sm-4"><img src="/front/About us/Fax.png"/>852 3260 3965</div></div><div class="col-sm-12  margin-bottom"><div class="col-sm-4 border-right"><img src="/front/About us/facebook.png"/> xxxxxxxxxxx</div><div class="col-sm-8"><img src="/front/About us/email.png"/> info@leungsdebtcollector.com.hk</div></div><div class="col-sm-12"><div class="col-sm-12 margin-bottom float-left"><img src="/front/About us/address.png"/> 九龍紅磡紅磡商業中心A座415F室</div><div class="col-sm-12 margin-bottom"><div><img src="/front/About us/opening hour.png"/></div><div><p>\r\n\t\t\t\t\t\t\t星期一至五: 早上10時 至 晚上7時 &nbsp;<br/>\r\n\t\t\t\t\t\t\t星期六: 早上10時至 下午1時<br/>\t\r\n\t\t\t\t\t\t\t(星期日及公眾假期休息)</p></div></div></div></div></div>	/uploads/14981855381pRdk.png	t	1	2017-06-23 02:38:58	2017-06-23 04:15:35
2	糾紛處理	handle	\N	<div class="handle-container"><div class="col-sm-12 margin-top handle_area"><h2 class="handle_title">個人或商業糾紛處理</h2><h2 class="handle_title hidden-xs">．．．．．．．．．</h2></div><div class="col-sm-12 padding-none"><div class="col-sm-12 handle_area"><div class="col-sm-5"><label class="area_title">專業調解</label><br/>\r\n\t\t\t\t\t豐富經驗的專業人員會以不同調解方式處理各種個案。他們會提供不同的催收計劃及意見為您製定最完善的計劃</div><div class="col-sm-5 col-sm-offset-2"><label class="area_title">項目管理</label><br/>\r\n\t\t\t\t\t建立的系統是以積極主動為方向，提供完整的催收計劃，協助個人或商業避免因疏忽致使發票被拖欠</div></div><div class="col-sm-12 padding-bottom"><div class="col-sm-5"><label class="area_title">跟進報告</label><br/>\r\n\t\t\t\t\t專業客戶支援團隊會定期為您提供跟進報告包括調解及催收行動計劃、債務人的詳細信息和催收狀況等</div><div class="col-sm-5 col-sm-offset-2"><label class="area_title">全面支援</label><br/>\r\n\t\t\t\t\t不論是個人或商業糾紛，我們的專業團隊也會為您提供非爭議式的債務催收方案，幫助您與客戶良好的商業關係</div></div></div><div class="col-sm-12 border_area"><label class="border_title">個人或商業糾紛處理包括</label><div class="col-xs-4 border_list list_margin_top"><img src="/front/Share for all pages/topic.png"/>糾紛登記</div><div class="col-xs-4 border_list list_margin_top"><img src="/front/Share for all pages/topic.png"/>債務催收</div><div class="col-xs-4 border_list list_margin_top"><img src="/front/Share for all pages/topic.png"/>準備發票副本</div><div class="col-xs-4 border_list list_margin-bottom"><img src="/front/Share for all pages/topic.png"/>解決方案</div><div class="col-xs-4 border_list list_margin-bottom"><img src="/front/Share for all pages/topic.png"/>催收函件</div><div class="col-xs-4 border_list list_margin-bottom"><img src="/front/Share for all pages/topic.png"/>監察還款計劃</div></div></div>	/uploads/1498191568dwevD.png	t	1	2017-06-23 04:19:28	2017-06-26 07:03:30
3	私隱政策	policy	\N	<div class="container padding-bottom"><div class="simple_content"><div class="content_title"><h3>私隱政策</h3></div><div class="contents">\r\n\t\t梁氏資產管理有限公司(&quot;本公司&quot;)關於個人資料(私隱)條例(&quot;條例&quot;)致客戶的通知 <br/><br/>\r\n\r\n\t\t(1) 客戶的有關資料可能會作下列用途︰<br/><p>\r\n\t\t\t(a)\t處理及批核借貸的申請，續期或取得；<br/>\r\n\t\t\t(b)\t提供服務和信貸便利給客戶之日常運作；<br/>\r\n\t\t\t(c)\t進行信貸審查；<br/>\r\n\t\t\t(d)\t協助其他財務機構作信用審查及債務追討；<br/>\r\n\t\t\t(e)\t確保客戶維持可靠信用；<br/>\r\n\t\t\t(f)\t設計為客戶使用信貸及相關貸款服務和產品；<br/>\r\n\t\t\t(g)\t推廣財務服務或有關產品；<br/>\r\n\t\t\t(h)\t確定本公司與客戶或之間的債務；<br/>\r\n\t\t\t(i)\t執行客戶向本公司應負之責任，包括但不限於向客戶及為客戶的責任提供抵押或擔保的人士追討欠款；<br/>\r\n\t\t\t(j)\t本公司為履行任何對其有約束力的法例的規定而作出披露；<br/>\r\n\t\t\t(k)\t使本公司的實在或建議承讓人，能對有關擬進行的轉讓、參與或附屬參與的交易作出評核；及<br/>\r\n\t\t\t(l)\t與上述一切有聯繫, 有附帶性或有關的用途。<br/></p><br/>\r\n\r\n\t\t(2) 本公司會將客戶的資料保密，但本公司可能把該等資料提供及披露予下列各方所述的用途︰<br/><p>\r\n\t\t\t(a)\t任何代理人、承包商或提供行政、電訊、電腦、付賬、債務追討或其他與本公司業務運作有關服務的第三方服務供應者；<br/>\r\n\t\t\t(b)\t任何對本公司有保密責任的人士，包括就有關資料對本公司有保密承諾而與本公司同屬一集團的公司或各商號或各聯營機構；<br/>\r\n\t\t\t(c)\t信貸資料服務機構，或如客戶欠賬時則可將該等資料提供予債務追收代理；<br/>\r\n\t\t\t(d)\t任何根據本公司需遵守的法律要求而向其作出披露的人士；及<br/>\r\n\t\t\t(e)\t任何本公司的實在或建議承讓人，或任何本公司對客戶權益的參與人或附屬參與人或受讓人。<br/></p><br/>\r\n\r\n\t\t(3) 根據條例規定及按其認可及發出的個人信貸資料實務守則，任何人士均有權︰<br/><p>\r\n\t\t\t(a)\t查核本公司是否持有其個人資料及有權查閱有關的資料；<br/>\r\n\t\t\t(b)\t要求本公司對其不準確的個人資料作出更正；<br/>\r\n\t\t\t(c)\t查明本公司對有關資料的政策及實務，並獲知本公司持有其個人資料的類別；及<br/>\r\n\t\t\t(d)\t如與個人信貸有關，可要求獲知何等資料會經常向信貸資料服務機構或債務追收代理披露，<br/>\r\n\t\t\t\t以及獲提供進一步資料，籍以向有關信貸資料服務機構或債務追收代理提出查閱及改正資料之要求。<br/></p><br/>\r\n\r\n\t\t(4) 根據條例的條款，本公司有權就處理任何查閱資料的要求收取合理費用。<br/><br/>\r\n\r\n\r\n\t\t(5) 任何關於資料查閱或資料改正，或索取關於資料政策及慣例，或所持有的資料種類的要求，應向下列人士提出：<br/>\r\n\t\t資料保護主任<br/>\r\n\t\t梁氏資產管理有限公司<br/>\r\n\t\t九龍紅磡紅磡商業中心A座415F室<br/>\r\n\t\t電話 ： 2780 0400<br/>\r\n\t\t傳真 ： 3260 3975<br/><br/>\r\n\r\n\t\t(6) 本通知不會限制客戶在個人資料（私隱）條例下所享有的權利。 <br/><br/></div></div></div>	\N	f	1	2017-06-23 07:26:13	2017-06-23 07:58:40
4	免責聲明	statement	\N	<div class="simple_content"><div class="content_title"><h3>免責聲明</h3></div><div class="contents">\r\n\t\t本網頁所記載的資料僅供一般參考之用，瀏覽人士需注意本網頁所展示的資料並非即時更新，梁氏資產管理有限公司(&quot;本公司&quot;)將盡力確保所提供資料的準確性及可靠性，但不保證有關資料的準確性及可靠性，亦不會承擔因資料不確或不全而引致損失的任何法律責任。<br/><br/>\r\n\r\n\t\t在法律允許的範圍內，本公司不保證此網址所提供的資料沒有任何錯誤、遺漏、不確，及有關本網址之使用或不能使用，或因本網址之運作中斷、缺陷、運作或傳送之阻延、或系統失靈而引致的任何直接、間接、附帶、從屬、特殊、懲罰性或懲戒性的損失或開支，本公司概不負責。<br/><br/>\r\n\r\n\t\t本公司擁有本網頁內資料的版權。任何人士未經本公司書面同意及批准，嚴禁改編、複製、分發或提供本網頁內的資料作商業或公開用途。<br/><br/>\r\n\r\n\t\t本網頁介紹的產品和服務僅適用於法律上接受本公司提供此等產品和服務的地區之任何人士，而對於法律上就本公司提供此等產品或服務有所限制的地區之人士，本網頁所記載的資料不應視作任何推介或招攬。請翻閱者自行了解和遵守當地的有關法律和法規。<br/><br/>\r\n\r\n\t\t本網頁資料不具任何約束性及責任性，本公司可隨時更改或取消有關產品及服務而毋須事前通知。瀏覽人士使用本網即表示同意此網不時所載聲明及政策。<br/><br/>\r\n\r\n\t\t梁氏資產管理有限公司<br/>\r\n\t\t九龍紅磡紅磡商業中心A座415F室<br/><br/></div></div>	\N	f	1	2017-06-23 08:19:16	2017-06-23 08:23:14
5	商業債務催收	service	\N	<div class="col-sm-12 handle_area  margin-top"><h2 class="handle_title">催收五部曲</h2><h2 class="handle_title">．．．．．</h2></div><div class="col-sm-12 padding-none"><div class="col-sm-12 padding-none Service_area"><div class="col-sm-5 col-xs-12"><div class="col-xs-7 float-left text-right padding-none"><h5>初步查詢</h5><p>我們的專業人員將與您進行會議，收集足夠的應收賬資料及信息，為您提供專業及最有效的服務</p></div><div class="col-xs-5"><img src="/front/Service/1.png"/></div></div><div class="col-sm-5 img_left col-sm-offset-7 col-xs-12"><div class="col-xs-5 img_left"><img src="/front/Service/2.png"/></div><div class="col-xs-7 text-left float-right"><h5>專業調查</h5><p>專業團隊會進行全方位評估各項資料及信息，收集更多個案資訊以建立合適的調解及催收計劃</p></div></div><div class="col-sm-5 col-xs-12"><div class="col-xs-7 float-left text-right padding-none"><h5>執行計劃</h5><p>調解及催收行動計劃將由我們的專業團隊執行，以不同方式進行調解</p></div><div class="col-xs-5"><img src="/front/Service/3.png"/></div></div><div class="col-sm-5 img_left  col-sm-offset-7 col-xs-12"><div class="col-xs-5 img_left"><img src="/front/Service/4.png"/></div><div class="col-xs-7 float-left text-left"><h5>定期報告</h5><p>專業客戶支援團隊將會定期向客戶提交個案跟進報告</p></div></div><div class="col-sm-5 col-xs-12"><div class="col-xs-7 float-left text-right padding-none"><h5>成功催收</h5><p>擁有豐富經驗的專業團隊監察分期償還債務狀況到收回款項，讓您不用調動業務人力及資源也能成功催收</p></div><div class="col-xs-5"><img src="/front/Service/5.png"/></div></div></div></div>	/uploads/1498206312OCeAD.png	t	1	2017-06-23 08:25:13	2017-06-26 04:56:32
6	專業調解	professional	<div class="container margin-top"><div class="handle-container"><div class="col-sm-12 handle_area"><h2 class="handle_title">專業服務</h2><h2 class="handle_title">．．．．</h2></div><div class="col-sm-12 padding-none"><div class="col-sm-12 handle_area"><div class="col-sm-5"><label class="area_title">專業調解</label><br/>\r\n\t\t\t\t\t\t\t我們擁有豐富催收經驗的專業調解員、法律及審計團隊。豐富經驗的專業人員會與您共同完成整個催收過程</div><div class="col-sm-5 col-sm-offset-2"><label class="area_title">免費查詢</label><br/>\r\n\t\t\t\t\t\t\t專業調解員會提供免費查詢服務，收集更多個案資訊建立合適的調解及催收計劃</div></div><div class="col-sm-12 padding-bottom"><div class="col-sm-5"><label class="area_title">調解計劃</label><br/>\r\n\t\t\t\t\t\t\t提供最佳的調解服務計劃，有效地解決客戶各種不同的壞賬催收</div><div class="col-sm-5 col-sm-offset-2"><label class="area_title">公平公道</label><br/>\r\n\t\t\t\t\t\t\t公正、持平的態度幫助雙方平心靜氣地協商調解，找出可行的解決方案，促使雙方達成付款協議。絕無隱藏收費</div></div></div></div></div>	<div class="container padding-bottom"><div class="handle-container"><div class="col-sm-12 handle_area  margin-top"><h2 class="handle_title">調解程序</h2><h2 class="handle_title">．．．．</h2></div><div class="col-sm-12 padding-none"><div class="col-sm-12 padding-none image"><img src="/front/Pro/債務人.png"/><img src="/front/Pro/right.png"/><img src="/front/Pro/梁氏資產管理.png"/><img src="/front/Pro/left.png"/><img src="/front/Pro/債務人.png"/><div class="col-xs-2 gray_people text-right">\r\n\t\t\t\t\t債權人</div><div class="col-xs-8 blue_people">\r\n\t\t\t\t\t梁氏資產管理</div><div class="col-xs-2 gray_people text-left">\r\n\t\t\t\t\t債務人</div></div><div class="col-sm-12 flow_chart text-center padding-bottom"><span>與雙方會面了解個案</span><br/><img src="/front/Pro/down.png"/><br/><span>雙方付代表洽談</span><br/><img src="/front/Pro/down.png"/><br/><span>製定和解協議書</span><br/><img src="/front/Pro/down.png"/><br/><span style="background: #882D17;">成功調解債項問題</span><br/></div></div></div></div>	/uploads/1498206375SIwYI.png	t	1	2017-06-23 08:26:16	2017-06-26 07:08:36
\.


--
-- Name: contents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: homestead
--

SELECT pg_catalog.setval('contents_id_seq', 6, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2017_06_21_101716_create_content_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: homestead
--

SELECT pg_catalog.setval('migrations_id_seq', 3, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
1	karenlin	karen@gmail.com	$2y$10$kbKOtiBpbfsZDDC4APiUAuyeWI8zScOSuEHLoDoB2E1y/nNQIADja	\N	2017-06-23 02:37:43	2017-06-23 02:37:43
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: homestead
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: contents_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY contents
    ADD CONSTRAINT contents_pkey PRIMARY KEY (id);


--
-- Name: migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: homestead
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

