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
    <div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif; background-color: #f9f6ec;'>
      <div class="flex flex-row flex-1 min-h-0">
        <div class="layout-content-container flex flex-col w-56" style="background:#bca6e7; border-radius:0; min-height:56px; height:calc(100vh - 0px);">
        <div class="flex h-full flex-col justify-between bg-[#bca6e7] p-4" style="border-radius:0; min-height:56px; background:#bca6e7;">
          <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                  <div class="flex items-center gap-3 px-3 py-2 rounded-full bg-[#ece9f1]">
                    <div class="text-[#131019]" data-icon="Users" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M164.47,195.63a8,8,0,0,1-6.7,12.37H10.23a8,8,0,0,1-6.7-12.37,95.83,95.83,0,0,1,47.22-37.71,60,60,0,1,1,66.5,0A95.83,95.83,0,0,1,164.47,195.63Zm87.91-.15a95.87,95.87,0,0,0-47.13-37.56A60,60,0,0,0,144.7,54.59a4,4,0,0,0-1.33,6A75.83,75.83,0,0,1,147,150.53a4,4,0,0,0,1.07,5.53,112.32,112.32,0,0,1,29.85,30.83,23.92,23.92,0,0,1,3.65,16.47,4,4,0,0,0,3.95,4.64h60.3a8,8,0,0,0,7.73-5.93A8.22,8.22,0,0,0,252.38,195.48Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#131019] text-sm font-medium leading-normal">顧客一覧</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#131019]" data-icon="CheckSquare" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM224,48V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208H208Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#131019] text-sm font-medium leading-normal">ToDo</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#131019]" data-icon="Calendar" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#131019] text-sm font-medium leading-normal">スケジュール</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#131019]" data-icon="File" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#131019] text-sm font-medium leading-normal">見積書作成</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="flex flex-col flex-1 min-h-0">
          <div class="gap-1 px-6 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col gap-1 px-4 pb-3 pt-5">
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
