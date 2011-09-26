\name{Batting}
\alias{Batting}
\docType{data}
\title{
Batting table
}
\description{
Batting table - batting statistics
}
\usage{data(Batting)}
\format{
  A data frame with 93955 observations on the following 24 variables.
  \describe{
    \item{\code{playerID}}{Player ID code}
    \item{\code{yearID}}{Year}
    \item{\code{stint}}{player's stint (order of appearances within a season)}
    \item{\code{teamID}}{Team; a factor}
    \item{\code{lgID}}{League; a factor with levels \code{AA} \code{AL} \code{FL} \code{NL} \code{PL} \code{UA}}
    \item{\code{G}}{Games}
    \item{\code{G_batting}}{Game as batter}
    \item{\code{AB}}{At Bats}
    \item{\code{R}}{Runs}
    \item{\code{H}}{Hits}
    \item{\code{X2B}}{Doubles}
    \item{\code{X3B}}{Triples}
    \item{\code{HR}}{Homeruns}
    \item{\code{RBI}}{Runs Batted In}
    \item{\code{SB}}{Stolen Bases}
    \item{\code{CS}}{Caught Stealing}
    \item{\code{BB}}{Base on Balls}
    \item{\code{SO}}{Strikeouts}
    \item{\code{IBB}}{Intentional walks}
    \item{\code{HBP}}{Hit by pitch}
    \item{\code{SH}}{Sacrifice hits}
    \item{\code{SF}}{Sacrifice flies}
    \item{\code{GIDP}}{Grounded into double plays}
    \item{\code{G_old}}{Old version of games (deprecated)}
  }
}
\details{
Variables \code{X2B} and \code{X3B} are named \code{2B} and \code{3B} in the original database
}
\source{
Lahman, S. (2010) Lahman's Baseball Database, 1871-2010, v.5.8, \url{http://baseball1.com/statistics/}
}
%\references{
%%  ~~ possibly secondary sources and usages ~~
%}
\keyword{datasets}

\examples{
data(Batting)
head(Batting)
}
