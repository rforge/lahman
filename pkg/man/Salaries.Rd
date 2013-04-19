\name{Salaries}
\alias{Salaries}
\docType{data}
\title{
Salaries table
}
\description{
Player salary data.  
}
\usage{data(Salaries)}
\format{
  A data frame with 23141 observations on the following 5 variables.
  \describe{
    \item{\code{yearID}}{Year}
    \item{\code{teamID}}{Team; a factor}
    \item{\code{lgID}}{League; a factor}
    \item{\code{playerID}}{Player ID code}
    \item{\code{salary}}{Salary}
  }
}
\details{
There is no real coverage of player's salaries until 1985.
}
\source{
Lahman, S. (2010) Lahman's Baseball Database, 1871-2012, 2012 version, \url{http://baseball1.com/statistics/}
}
%\references{
%%  ~~ possibly secondary sources and usages ~~
%}
\keyword{datasets}

\examples{
# what years are included?
summary(Salaries$yearID)
# how many players included each year?
table(Salaries$yearID)

# add salary to Batting data
batting <- merge(Batting, 
                 Salaries[,c("playerID", "yearID", "teamID", "salary")], 
                 by=c("playerID", "yearID", "teamID"), all.x=TRUE)
str(batting)

#######################################
# Average salaries by teams, over years
#######################################

require(plyr)
avesal <- ddply(Salaries, .(yearID, teamID, lgID), summarise, 
	salary= mean(salary)/100000)

# remove infrequent teams
tcount <- table(avesal$teamID)
avesal <- subset(avesal, avesal$teamID \%in\% names(tcount)[tcount>=15], drop=TRUE)
avesal$teamID <- factor(avesal$teamID, levels=names(tcount)[tcount>=15])

require(lattice)
xyplot(salary ~ yearID | teamID, data=avesal, ylab="Salary (100,000$)")

}

