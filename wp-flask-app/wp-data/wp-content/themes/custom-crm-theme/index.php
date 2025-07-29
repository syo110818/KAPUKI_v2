<?php
// ヘッダーを読み込む
get_header();
?>
<?php
/**
 * Template Name: 顧客一覧テンプレート
 */
?>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Serif%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
   
      <div class="flex flex-row flex-1 min-h-0">
        <!-- サイドバーは sidebar.php で表示されます -->
        <div class="flex flex-col flex-1 min-h-0">
          <div class="gap-1 px-6 flex flex-1 justify-center py-0">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col gap-1 px-4 pb-0 pt-0">
              <div class="flex items-center justify-between">
                <h2 class="text-[#131019] text-[22px] font-bold leading-tight tracking-[-0.015em]">顧客一覧</h2>
                <form class="flex items-center" action="#" method="get">
                  <input
                    type="text"
                    name="customer_search"
                    placeholder="顧客を検索"
                    class="border border-[#6944a8] rounded-full px-4 py-2 text-sm w-48 focus:outline-none focus:ring-2 focus:ring-[#bca6e7] bg-white placeholder-[#bcbcbc] text-black"
                    autocomplete="off"
                  />
                  <button type="submit" class="ml-2 px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">検索</button>
                </form>
              </div>
              <div class="text-[#695b8b] text-sm font-normal mt-1">登録件数：6件</div>
            </div>
              <div class="px-4 py-3 @container">
                <div class="flex overflow-hidden rounded-xl border border-[#d8d4e3] bg-[#f9f9fb]">
                  <table class="flex-1">
                    <thead>
                      <tr class="bg-[#f9f9fb]">
                        <th class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 px-4 py-3 text-left text-[#131019] w-[400px] text-sm font-medium leading-normal">氏名</th>
                        <th class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 px-4 py-3 text-left text-[#131019] w-[400px] text-sm font-medium leading-normal">
                          電話番号
                        </th>
                        <th class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 px-4 py-3 text-left text-[#131019] w-[400px] text-sm font-medium leading-normal">住所</th>
                        <th
                          class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 px-4 py-3 text-left text-[#131019] w-60 text-[#695b8b] text-sm font-medium leading-normal"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          山田 太郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          090-1234-5678
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          東京都渋谷区
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          佐藤 花子
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-9876-5432
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          大阪府大阪市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          鈴木 一郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          070-1122-3344
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          愛知県名古屋市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          田中 次郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          090-5555-6666
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          福岡県福岡市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                       <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr>
                       <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button type="button" class="px-4 py-2 rounded-full bg-[#6944a8] text-white text-sm font-medium hover:bg-[#4b277a] transition">詳細</button>
                        </td>
                      </tr> <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          詳細
                        </td>
                      </tr>
                       <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          詳細
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          詳細
                        </td>
                      </tr>
                      <tr class="border-t border-t-[#d8d4e3]">
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120 h-[72px] px-4 py-2 w-[400px] text-[#131019] text-sm font-normal leading-normal">
                          高橋 三郎
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          080-7777-8888
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360 h-[72px] px-4 py-2 w-[400px] text-[#695b8b] text-sm font-normal leading-normal">
                          北海道札幌市
                        </td>
                        <td class="table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480 h-[72px] px-4 py-2 w-60 text-[#695b8b] text-sm font-bold leading-normal tracking-[0.015em]">
                          詳細
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <style>
                            @container(max-width:120px){.table-90225f17-1af3-44de-a0cf-3af93eba4043-column-120{display: none;}}
                  @container(max-width:240px){.table-90225f17-1af3-44de-a0cf-3af93eba4043-column-240{display: none;}}
                  @container(max-width:360px){.table-90225f17-1af3-44de-a0cf-3af93eba4043-column-360{display: none;}}
                  @container(max-width:480px){.table-90225f17-1af3-44de-a0cf-3af93eba4043-column-480{display: none;}}
                </style>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
