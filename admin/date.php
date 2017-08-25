<style type="text/css">
.date {
border:none;
border-bottom:2px solid #f0f0f0;
}
</style>
<input type="text" name="txtDate" id="txtDate" class="date" maxlength="2" size="2" onkeypress="dokeypress(event)" onkeyup="dokeyup(event, this)" onfocus="dofocus(this)" />
-<input type="text" name="txtMonth" id="txtMonth" class="date" maxlength="2" size="2" onkeypress="dokeypress(event)" onkeyup="dokeyup(event, this)" onfocus="dofocus(this)" />
-<input type="text" name="txtYear" id="txtYear" class="date" maxlength="4" size="4" onkeypress="dokeypress(event)" onkeyup="dokeyup(event, this)" onfocus="dofocus(this)" />
&nbsp;

<script type="text/javascript">
var minYear = 1900 + 543; //ปีพศ. ต่ำสุด
var maxYear = 2100 + 543; //ปีพศ. สูงสุด

//ฟังก์ชั่นจำนวนวันในเดือนกุมภาพันธ์
function daysInFebruary (year) {
  return (((year % 4 == 0) & ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}

//ฟังก์ชั่นคืนจำนวนวันในแต่ละเดือน
function DaysArray(year) {
for (var n = 1; n <= 12; n++) {
  this[n] = 31
  if (n==4 || n==6 || n==9 || n==11) {this[n] = 30}
  if (n==2) {this[n] = daysInFebruary(year)}
}
return this
}

function dokeypress (event) {
key = event.keyCode
if (key < 48 || key > 57) event.returnValue = false; //ตรวจสอบให้กรอกตัวเลขเท่านั้น

}

function dokeyup (event, obj) {
if (event.ctrlKey & event.keyCode == 86) obj.value = "" //ยกเลิกหากด Ctrl+V
else if (obj.value.length == 2) { //ถ้าพิมพ์ตัวอักษรครบ 2 ตัวให้ไปช่องถัดไป
  if (obj.name == "txtDate") document.getElementById("txtMonth").focus()
  else if (obj.name == "txtMonth") document.getElementById("txtYear").focus()
} else if (obj.value.length == 4 & obj.name == "txtYear") document.getElementById("submit").focus() //ถ้าพิมพ์ปีครบ 4 ตัว ย้ายไปที่ submit
}

function dofocus (obj) {
obj.select()
}

function dosubmit () {
//ค่าอ่านมาจาก Text Box
var dayObj = document.getElementById("txtDate")
var monthObj = document.getElementById("txtMonth")
var yearObj = document.getElementById("txtYear")
//แปลงเป็นตัวเลข
var day = parseInt(dayObj.value)
var month = parseInt(monthObj.value)
var year = parseInt(yearObj.value)
//จำนวนวันในแต่ละเดือน ในปี คศ.
var daysInMonth = DaysArray(year - 543)
//ตรวจสอบความถูกต้องของค่าต่างๆ
if (year < minYear || year > maxYear) {
  alert("ปี พศ. ต้องอยู่รำหว่าง พศ." + minYear + " จนถึง พศ." + maxYear)
  yearObj.focus()
  return false
} else if (month < 1 || month > 12) {
  alert("เดือนไม่ถูกต้อง")
  monthObj.focus()
  return false
} else if (day < 1 || day > daysInMonth[month - 1]) {
  alert ("วันที่ไม่ถูกต้อง")
  dayObj.focus()
  return false
} else {
  var dayStr = dayObj.value
  var monthStr = monthObj.value
  var yearStr = yearObj.value
  //ตรวจสอบให้วันที่และเดือนมี 2 หลัก
  if (dayStr.length < 2) dayStr = "0" + day
  if (monthStr.length < 2) monthStr = "0" + month
  //แสดงวันที่ที่ป้อน
  alert(dayStr+"-"+monthStr+"-"+yearStr)
  return true
}
}
</script>
