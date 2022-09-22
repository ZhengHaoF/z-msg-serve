<template>
  <a-row>
    <a-col :span="4">
      <div class="room-list">
        <h2>
          房价列表
        </h2>
        <div class="room-options active">
          默认房间 : 000
        </div>
        <div class="room-options">
          默认房间 : 001
        </div>
        <div class="room-options">
          默认房间 : 002
        </div>
      </div>
    </a-col>
    <a-col :span="20">
      <div class="msg-box">
        <div class="msg-title">
          默认房间 : 000
        </div>
        <div class="msg-body">
          <div class="content-box get"><p>你好</p></div>
          <div class="content-box send"><p>你是哪位</p></div>
          <div class="content-box get"><p>我是HI</p></div>
          <div class="content-box send"><p></p></div>
        </div>
        <div class="msg-seng-box">
          <a-textarea>

          </a-textarea>
          <a-button type="primary">
            发送
          </a-button>
        </div>
      </div>
    </a-col>
  </a-row>
</template>

<script setup>

</script>

<style scoped>
.room-list {
  background-color: #e6f7ff;
  height: 100%;
  padding: 20px;
}

.room-options {
  width: 100%;
  background-color: white;
  min-height: 50px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  font-size: 18px;
  border-radius: 5px;
  margin-bottom: 10px;
  padding: 10px;
  transition: all 0.2s;
  user-select: none;
}


.room-options:hover {
  background-color: #e6f7ff;
  box-shadow: 2px 2px 2px 1px #7dd6ff;
}

.active {
  background-color: #94ddff;
  box-shadow: 2px 2px 2px 1px #7dd6ff;
}

.msg-box {
  padding: 10px;
  height: 100%;
}

.msg-title {
  font-size: 24px;
  min-height: 60px;
  font-weight: bolder;
  padding: 20px;
  background-color: #ebf8ff;
  border: 1px solid #7dd6ff;
  border-radius: 5px;

}

.msg-body {
  width: 100%;
  height: 70vh;
  background-color: #f7fdff;
  margin-top: 5px;
  border: 1px solid #7dd6ff;
  border-radius: 5px;
  padding: 20px;
  overflow-x: hidden;
  overflow-y: scroll;

}

.content-box {
  min-height: 30px;
  font-size: 18px;
  border-radius: 5px;
  width: 100%;
}

.content-box p{
  width: 50%;
}

.get {
  background-color: #d9f5ff;
}
.get p{
  text-align: left;
}
.send {

}
.send p{
  float: right;
}
.msg-seng-box {
  padding-top: 5px;
  text-align: right;
  min-height: 10%;
  width: 100%;
}
</style>
