document.addEventListener("DOMContentLoaded",(event) => {
  if (document.getElementById('calendar')) {
    console.log('app js');
    let calendarSwiper = new Swiper(".calendar__swiper", {
      freeMode: true,
      cssMode: true,
      slidesPerView: "auto",
      scrollbar: {
        el: '.calendar__swiper-paggination',
        draggable: true,
      },
      // pagination: {
      //   el: ".calendar__swiper-paggination",
      //   type: "progressbar",
      // },
    });


    let calendar = new Vue({
      el: '#calendar',
      data() {
        const month = new Date().getMonth();
        const year = new Date().getFullYear();
        return {
          // modal: {
          //   title: "РќР°Р·РІР°РЅРёРµ РјРѕРґР°Р»СЊРЅРѕРіРѕ РѕРєРЅР°",
          //   otv: "Р¤Р?Рћ РѕС‚РІРµС‚СЃС‚РІРµРЅРЅРѕРіРѕ",
          //   contact: "РљРѕРЅС‚Р°РєС‚С‹",
          //   svyaz: "Р РµР¶РёРј СЃРІСЏР·Рё",
          //   date: "Р”Р°С‚Р°",
          //   studio_espd: "РЎС‚СѓРґРёСЏ РІРёРґРµРѕРєРѕРЅС„РµСЂРµРЅС†РёРё РІ СЃРѕСЃС‚Р°РІРµ Р•РЎРџР”",
          //   studio_districts: "РЎС‚СѓРґРёСЏ РІРёРґРµРѕРєРѕРЅС„РµСЂРµРЅС†РёРё РІ РђРґРјРёРЅРёСЃС‚СЂР°С†РёСЏС… РјСѓРЅРёС†РёРїР°Р»СЊРЅС‹С… СЂР°Р№РѕРЅРѕРІ Р РЎ (РЇ)",
          //   file: null
          // },
          isMounted: false,
          masks: {
            weekdays: 'WWWW',
            title: "MMMM"
          },
          attributes: [
            {
              key: '1',
              id: "85",
              customData: {
                title: "РњРёРЅРёСЃС‚РµСЂСЃС‚РІРѕ С‚СЂСѓРґР° Рё СЃРѕС†РёР°Р»СЊРЅРѕРіРѕ СЂР°Р·РІРёС‚РёСЏ Р РЎ(РЇ)",
                time: "12:00",
              },
              dates: "2023, 05, 3"
            },
            {
              key: '2',
              id: "122",
              customData: {
                title: "РњРёРЅРёСЃС‚РµСЂСЃС‚РІРѕ Р¶РёР»РёС‰РЅРѕ-РєРѕРјРјСѓРЅР°Р»СЊРЅРѕРіРѕ С…РѕР·СЏР№СЃС‚РІР° Рё СЌРЅРµСЂРіРµС‚РёРєРё Р РЎ(РЇ)",
                time: "16:00",
              },
              dates: "2023, 05, 3"
            },
            {
              key: '3',
              id: "32",
              customData: {
                title: "РњРёРЅРёСЃС‚РµСЂСЃС‚РІРѕ СЃРµР»СЊСЃРєРѕРіРѕ С…РѕР·СЏР№СЃС‚РІР° Р РЎ(РЇ)",
                time: "17:00",
              },
              dates: "2023, 05, 3"
            }
          ]
        };
      },
      methods:{
        nextMonth()
        {
          this.$refs.calendar.move(1)
          this.selectMonth = this.$refs.calendar.pages[0].month
        },
        prevMonth()
        {
          this.$refs.calendar.move(-1)
          this.selectMonth = this.$refs.calendar.pages[0].month
        },
        changeYear(year)
        {
          this.selectYear = year
          this.$refs.calendar.move({month: parseInt(this.selectMonth),year: parseInt(year)})
        },
        changeMonth(month)
        {
          this.selectMonth = month
          this.$refs.calendar.move({month: parseInt(month),year: parseInt(this.selectYear)})
        },
        changeModalInfo(title,otv,contact,svyaz,studio_espd,studio_districts,date,file)
          {
            this.modal.title = title
              this.modal = {
                title: title,
                otv: otv,
                contact: contact,
                svyaz: svyaz,
                date: date,
                studio_espd: studio_espd,
                studio_districts: studio_districts,
              file: file
              }
            }
          },
      computed:{
        thisMonth: function () {
          if(this.isMounted)
          {
            return this.$refs.calendar.pages[0].monthLabel
          }
          return
        },
        thisYear: function () {
          if(this.isMounted)
          {
            return this.$refs.calendar.pages[0].yearLabel
          }
          return
        },
      },
      async mounted(){
        this.isMounted = true
        this.selectMonth = this.$refs.calendar.pages[0].month
        this.selectYear = this.$refs.calendar.pages[0].year
        console.log(this.attributes)

        // let formData = new FormData();

        // let res = await fetch('/api/calendar/get/', {
        //   mode: 'cors',
        //   method: 'POST',
        //   body: formData,
        // });

        // let json = await res.json();
        // this.attributes = json.data;
        // console.log(json.data);
        // console.log(this.attributes[0].dates)
      }
    });
  };
});