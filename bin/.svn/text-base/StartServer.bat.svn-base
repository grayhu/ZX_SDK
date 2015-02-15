

setlocal

set YHDSDK_HOME=%~dp0..

for %%x in ("%YHDSDK_HOME%") do set YHDSDK_HOME=%%~sx



set TEMP_JAVA_HOME=%YHDSDK_HOME%\jre

if exist "%TEMP_JAVA_HOME%\bin\java.exe" set JAVA_HOME=%TEMP_JAVA_HOME%
if exist "%JAVA_HOME%\bin\java.exe" goto JavaFound
echo JAVA_HOME does not point at a JDK or JRE.  Either set the JAVA_HOME environment variable or specify a JDK.
goto end 

:JavaFound
set JETTY_HOME=%YHDSDK_HOME%\lib\jetty

set JAVA_OPTS=%JAVA_OPTS% -client

set JAVA_OPTS=%JAVA_OPTS% -XX:+AggressiveOpts
set JAVA_OPTS=%JAVA_OPTS% -XX:+UseParallelGC
set JAVA_OPTS=%JAVA_OPTS% -XX:+UseStringCache
set JAVA_OPTS=%JAVA_OPTS% -XX:+UseBiasedLocking
set JAVA_OPTS=%JAVA_OPTS% -XX:+UseFastAccessorMethods


set JAVA_OPTS=%JAVA_OPTS% -XX:MaxPermSize=256m


set JAVA_OPTS=%JAVA_OPTS% -DYHDSDK_HOME=%YHDSDK_HOME%
set JAVA_OPTS=%JAVA_OPTS% -Dfile.encoding=GBK
set JAVA_OPTS=%JAVA_OPTS% -Dmain.class=com.yhd.sby.zx.sdk.jetty.StartServer
set JAVA_OPTS=%JAVA_OPTS% -DSTART=%YHDSDK_HOME%\conf\start.config
set JAVA_OPTS=%JAVA_OPTS% -Djava.io.tmpdir=%YHDSDK_HOME%\temp
set JAVA_OPTS=%JAVA_OPTS% -Duser.home=%YHDSDK_HOME%\temp
set JAVA_OPTS=%JAVA_OPTS% -Duser.dir=%YHDSDK_HOME%\temp


 
for %%a in (%JETTY_HOME%\start*.jar) do  set START_JAR=%%a
if not "%START_JAR%"=="" goto StartJarFound
echo start.jar was not found.  Check your SDK installation.
goto end 

:StartJarFound
set JETTY_OPTS=-jar %START_JAR%
goto JettyOptsSet

:JettyOptsSet
if defined JAVA_OPTS set JETTY_OPTS=%JAVA_OPTS% %JETTY_OPTS%
set currentVersioninfo=%YHDSDK_HOME%\version.txt 
if exist %currentVersioninfo%  goto updateWar
goto startServer

:更新war包判断，如果不是最新版本则从远程服务器上拉取最新war包
:updateWar
for /F "tokens=1" %%i in (%currentVersioninfo%) do set oldVersionNo=%%i
wget.exe --no-check-certificate -q -O %YHDSDK_HOME%\temp\version.txt  https://github.com/grayhu/YHDSdk/raw/master/version.txt

set remoteVersionInfo=%YHDSDK_HOME%\temp\version.txt
for /F "tokens=1" %%i in (%remoteVersionInfo%) do set newVersionNo=%%i
if %newVersionNo% GTR %oldVersionNo% (goto downloadWar) else (goto startServer)

:远程下载war包
:downloadWar
wget.exe --no-check-certificate -r -O %YHDSDK_HOME%\conf\zx-sdk-webapp.war  https://github.com/grayhu/YHDSdk/raw/master/zx-sdk-webapp.war 
del %currentVersioninfo%
copy /y %remoteVersionInfo% %currentVersioninfo%
goto startServer 

:启动服务器
:startServer
set PWD=%CD%
cd /d "%JETTY_HOME%"
set PWD=%CD%
cd /d "%JETTY_HOME%"
"%JAVA_HOME%\bin\java.exe" %JETTY_OPTS%
cd /d "%PWD%"
goto end 

:end
pause
