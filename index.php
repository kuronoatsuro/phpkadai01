<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート</title>
</head>

<body>

<h1>
    MBTI集計サイト
</h1>

<form method="POST" action="write.php">
    ニックネーム: <input type="text" name="name">
	あなたのMBTI: <select name="mbti">
        <option value='intj'>INTJ（建築家）</option>
        <option value='intp'>INTP（論理学者）</option>
        <option value='entj'>ENTJ（指揮官）</option>
        <option value='entp'>ENTP（討論者）</option>
        <option value='infj'>INFJ（提唱者）</option>
        <option value='infp'>INFP（仲介者）</option>
        <option value='enfj'>ENFJ（主人公）</option>
        <option value='enfp'>ENFP（運動家）</option>
        <option value='istj'>ISTJ（管理者）</option>
        <option value='isfj'>ISFJ（擁護者）</option>
        <option value='estj'>ESTJ（幹部）</option>
        <option value='esfj'>ESFJ（領事）</option>
        <option value='istp'>ISTP（巨匠）</option>
        <option value='isfp'>ISFP（冒険家）</option>
        <option value='estp'>ESTP（起業家）</option>
        <option value='esfp'>ESFP（エンターテイナー）</option>
	<input type="submit" value="送信">
</form>

<a href="read.php">結果を見る</a>

</body>
</html>